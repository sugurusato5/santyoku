
<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
      {{-- {{asset('storage/santyoku_image/'.$santyoku->image_url)}} --}}
            <img src="{{ url($santyoku->image_url) }}" alt="..." class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
          <div class="card-body">
            <h3 class="card-text" align="center">{{ $santyoku->title}}</h3>
          <div class="grad-wrap">
              <input id="{{ $santyoku->id }}" class="grad-trigger" type="checkbox">
            <div class="grad-item">{{ $santyoku->description}}</div>
    <label class="grad-btn" for="{{ $santyoku->id }}"></label>
</div>

            <p class="card-text">¥{{ $santyoku->price}}</p>
              <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                      <button type="button" class="btn btn-secondary my-2" onclick="location.href='{{ route('santyokus.show', $santyoku->id) }}'">商品詳細</button>
                      <form action="mycart" method="post">
                          @csrf
                            {{-- <input type="hidden" name="stock_id" value="{{ $stock->id }}"> --}}
                            {{-- <input type="submit" value="カートに入れる"> --}}
                            <button type="button" value="" class="btn btn-secondary my-2" onclick="location.href='{{ route('carts.show', $santyoku->id) }}'">購入する</button>
                      </form>
                  </div>
              </div>
          </div>
    </div>
</div>
                


