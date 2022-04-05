<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;


Route::get("/", [ProductController::class, 'displayIndex'])->name("/");

Route::get("list", [ProductController::class, 'productList'])->name("list");

Route::get('product', [ProductController::class, 'productDetails'])->name("productDetails");

Route::get("login", [UserController::class, 'login'])->name("login");

Route::get("register", [UserController::class, "register"])->name("register");

Route::post("dologin", [UserController::class, "dologin"])->name("dologin");
          
Route::post("doregister", [UserCOntroller::class, "doregister"])->name("doregister");



Route::middleware("is_admin")->group(function () {
    Route::prefix("admin")->group(function () {
        Route::name("admin.")->group(function () {

            Route::prefix("product")->group(function () {
                Route::name("product.")->group(function () {
                    Route::get("add", [AdminController::class, "add"])->name("add");
                    Route::post("create", [AdminController::class, "create"])->name("create");
                    Route::get("products_table", [ProductController::class, "productsTable"])->name("products_table");
                    Route::get("edit_product", [ProductController::class, "editProduct"])->name("edit_product");
                    Route::post("update_product", [ProductController::class, 'updateProduct'])->name("update_product");
                    Route::get("delete_product", [ProductController::class, "deleteProduct"])->name("delete_product");
                    Route::get("upload_data", [ExcelUploadController::class, "uploadData"])->name("upload_data");
                    Route::post("excel_create", [ExcelUploadController::class, "excelCreate"])->name("excel_create");
                    Route::get("download_data", [ExcelDownloadController::class, 'downloadData'])->name("download_data");
                });
            });
            Route::prefix("order")->group(function () {
                Route::get("orders_list", [OrderController::class, "ordersList"])->name("order.orders_list");
            });
        });
    });
});

Route::prefix("user")->group(function () {
  Route::name("user.")->group(function () {
      Route::middleware("is_guest")->group(function () {
          

      });
      Route::middleware("is_user")->group(function () {
          Route::prefix("product")->group(function () {
              Route::name("product.")->group(function () {
                  Route::get("buy", [ProductController::class, "buy"])->name("buy");
                  Route::get("cart", [ProductController::class, "cart"])->name("cart");
                  Route::get("checkout", [ProductController::class, "checkout"])->name("checkout");
                  Route::get("verify_payment", [ProductController::class, "verify"])->name("payment.verify");
                });
            Route::prefix("cart")->group(function(){
                Route::name("cart.")->group(function(){
                    Route::post("store", [ProductController::class, 'store'])->name("store");
                });
            });
          });
          Route::get("welcome", [UserController::class, "welcome"])->name("welcome");
          Route::get("logout", [UserController::class, "logout"])->name("logout");
      });
  });
});
