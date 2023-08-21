<x-layout>
    <div class="container p-5">
        <h2>Register form</h2>
        <form action="/register" method="post">
            @csrf
            <div class="mb-3 mt-3">
                <label for="name" class="from-label">Name :</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email ID</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            <button class="btn btn-primary">Next</button>
        </form>
    </div>
</x-layout>