<?php 
require('includes/header.php');
?>

<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Thêm Mới Người Dùng</h1>
                    </div>
                    <form class="user" method="post" action="adduser.php" enctype="multipart/form-data">                        
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="name" name="name" aria-describedby="emailHelp"
                            placeholder="Tên Người Dùng">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Email:</label>
                        <textarea name="email" class="form-control" placeholder="Nhập...">

                        </textarea>
                    </div>
                    <div class="form-group">
                    <label class="form-label">Mật Khẩu:</label>
                        <textarea name="password" class="form-control" placeholder="Nhập...">

                        </textarea>
                    </div>
                    <button class="btn btn-primary">Tạo Mới</button>
                    </form>
                    <hr>
                    
                </div>
            </div>
        </div>
    </div>
</div>

</div>

      
<?php
require('includes/footer.php');
?>