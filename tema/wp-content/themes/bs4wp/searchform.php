<form class="form" role='search' method='get' action="<?php echo home_url('/'); ?>">
    <div class="input-group">
        <input type="search" class="form-control" value="<?php echo get_search_query();?>" name="search" />
        <div class="input-group-append">
            <button class="btn btn-my-color-2" type="submit" style='color:white'>Buscar</button>
        </div>
    </div>
</form>