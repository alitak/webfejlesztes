<div class="row">
    <div class="mt-4 col">
        {foreach from=$data item=$post}
            <div class="jumbotron">
                <h2 class="display-4">{$post->title}</h2>
                {$post->post}
                <div class="w-100"></div>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
        {/foreach}
    </div>
</div>