<x-layout>
    <div class="container mt-5">
        <h2>Your Resume</h2>
        <form action="" method="post">
            <div class="row p-3">
                <div class="col-md-4">
                    <label for="" class="form-label">Frist Name</label>
                    <input type="text" class="form-control border-dark" name="f_name" id="f_name">
                    <label for="" class="form-label">Midle Name</label>
                    <input type="text" class="form-control border-dark" name="m_name" id="m_mane">
                    <label for="" class="form-label">Last Name</label>
                    <input type="text" class="form-control border-dark" name="l_name" id="l_name">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control border-dark" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="col-md-4">
                <label for="" class="form-label">Github Id Link</label>
                    <input type="text" class="form-control border-dark" name="github" id="github">
                    <label for="" class="form-label">Hakerrank Id Link</label>
                    <input type="text" class="form-control border-dark" name="Hakerrank" id="Hakerrank">
                </div>
                <div class="col-md-4">
                <label for="" class="form-label">Image</label>       
                <input type="file"name="myfile"id="myfile" class="form-control">        
                </div>
            </div>
            <hr class="border border-primary">
            <div class="row p-3">
                <div class="container">
                    <h3>Address</h3>
                </div>
                    <div class="col-md-4">
                    <input type="text" class="form-control border-dark" name="address" id="address"placeholder="Village/city">
                    <input type="text" class="form-control border-dark mt-3" name="nationality" id="nationality"placeholder="Nationality">
                    </div>
                    <div class="col-md-4">
                    <input type="text" class="form-control border-dark" name="address" id="address" placeholder="District">
                    <input type="text" class="form-control border-dark mt-3" name="zipcode" id="zipcode" placeholder="Zip-code">
                    </div>
                    <div class="col-md-4">
                    <input type="text" class="form-control border-dark" name="address" id="address"placeholder="State">
                    <input type="text" class="form-control border-dark mt-3" name="mobile" id="mobile"placeholder="Mobile Number">
                </div>      
            </div>
            <hr class="border border-primary">
            <div class="row p-3">
                <div class="container">
                    <div class="col-md-4">

                    </div>
                </div>
            </div>
        </form>
    </div>
</x-layout>