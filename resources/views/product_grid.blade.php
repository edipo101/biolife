<x-layout>
  {{-- @include('partials.hero') --}}

	{{-- Navigation bar --}}
	<x-navigation_bar></x-navigation_bar>
	<div class="page-contain category-page no-sidebar">
		<div class="container">
			<div class="row">

				<!-- Main content -->
				<div id="main-content" class="main-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="product-category grid-style">

						{{-- Toolbar --}}
						<x-toolbar></x-toolbar>
            
						{{-- Products --}}
            <div class="row">
							<ul class="products-list">

								@foreach ($products as $product)
								<li class="product-item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                  <x-prod_card 
                  :item='$product->image_id'
                  :category='$category->name'
                  :name='$product->name'
                  :currentPrice='$product->current_price'
                  :previousPrice='$product->previous_price'
                  />
                </li>
                @endforeach
              </ul>

            </div>

            {{-- Pagination links --}}
            {{$products->onEachSide(1)->links('components.pagination')}}
          </div>

        </div>
      </div>
    </div>
  </div>
</x-layout>