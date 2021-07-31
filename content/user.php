<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Master User</div>
            <div class="card-body">
                <form action="index.php?page=user_simpan"  method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label for="">Level</label>
                        <select name="level" class="form-control">
                            <option>Admin</option>
                            <option>User</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Foto</label>
                        <input type="file" class="form-control" name="foto">
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-success" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>