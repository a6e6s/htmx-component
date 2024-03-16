<div>
    <div class="container ">
        <div class="row">
            <div class="col-md-6 mx-auto my-5 bg-light border shadow rounded p-5">
                <form hx-post="{{ route('login') }}" hx-target=".info">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" id="name" placeholder="" />
                        <label for="name">Name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="password" id="password" placeholder="" />
                        <label for="password">password</label>
                    </div>
                    <button class="btn btn-success">Login</button>
                </form>
                <div class="info"></div>

            </div>
        </div>
    </div>

</div>
