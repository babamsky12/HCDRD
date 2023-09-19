<form action="{{ route('products.search') }}" method="GET">
    <div class="input-group">
        <input type="text" class="form-control" name="query" placeholder="Search...">
        <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Search</button>
        </span>
    </div>
</form>
