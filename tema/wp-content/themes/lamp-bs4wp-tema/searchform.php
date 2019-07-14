<form class="form" role='search' method='get' action="<?php echo home_url('/'); ?>">
    <div class="input-group mt-1">
        <input type="search" class="form-control" placeholder="Pesquisar" value="<?php echo get_search_query();?>" name="search" />
        <div class="input-group-append">
            <button class="btn btn-danger" type="submit">
              	<i class="fas fa-search"></i>
          	</button>
        </div>
    </div>
</form>