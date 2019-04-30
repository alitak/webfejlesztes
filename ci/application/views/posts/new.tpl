<div class="row">
    <div class="col">
        <h1><i class="fas fa-file"></i> New post</h1>
    </div></div>
<div class="row">
    <div class="col">
        <form action="store" method="post">
            <div class="form-group">
                <label for="category"><i class="fas fa-layer-group"></i> Category</label>
                <select class="custom-select" id="category" name="category">
                    {foreach from=$categories item=$cat}
                        <option value="{$cat->id}">{$cat->name}</option>
                    {/foreach}
                </select>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Post title" name="title">
            </div>
            <div class="form-group">
                <label for="post">Post</label>
                <textarea class="form-control" id="post" name="post"></textarea>
            </div>
            <a href="/ci/posts" type="button" class="btn btn-light"><i class="fas fa-backward"></i> Back</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
        </form>
    </div>
</div>
