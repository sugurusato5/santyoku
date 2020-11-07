
<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
            {{-- <img src="/santyoku_image/{{ $santyoku->image_url }}" alt="..." class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"> --}}
            {{-- <img src="{{ asset('sorage/santyoku_image/$santyoku->image_url') }}" alt="..." class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"> --}}
            
            <img src="{{ $santyokus['img_url'] }}">

          <div class="card-body">
            <h3 class="card-text">{{ $santyokus['title']}}</h3>
            <p class="card-text">{{ $santyokus['description']}}</p>
              <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    
                      <button type="button" class="btn btn-secondary my-2" onclick="location.href='{{ route('santyokus.show', $santyokus['id']) }}'">商品詳細</button>
                      <button type="button" class="btn btn-secondary my-2" >購入</button>
                     {{dd($santyoku)}}
                      {{-- {{dd($santyokus)}} --}}
                  </div>
              </div>
          </div>
    </div>
</div>
                


