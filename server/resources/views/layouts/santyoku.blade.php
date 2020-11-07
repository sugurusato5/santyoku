
<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
      {{asset('storage/santyoku_image/'.$santyoku->image_url)}}
            <img src="{{ url($santyoku->image_url) }}" alt="..." class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
          <div class="card-body">
            <h3 class="card-text">{{ $santyoku->title}}</h3>
            <p class="card-text">{{ $santyoku->description}}</p>
              <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                      <button type="button" class="btn btn-secondary my-2" onclick="location.href='{{ route('santyokus.show', $santyoku->id) }}'">商品詳細</button>
                      <button type="button" class="btn btn-secondary my-2" >購入</button>
                  </div>
              </div>
          </div>
    </div>
</div>
                


