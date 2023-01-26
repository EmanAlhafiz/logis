<div class="testimonial-item">
    <img src="{{ $img }}" class="testimonial-img" alt="">
    <h3>{{ $name }}</h3>
    <h4>{{ $position }}</h4>
    <div class="stars">
      @for ($i = 1; $i <= $stars; $i++)
          <i class="bi bi-star-fill"></i>
      @endfor
    </div>
    <p>
      <i class="bi bi-quote quote-icon-left"></i>
      {{ $description }}
      <i class="bi bi-quote quote-icon-right"></i>
    </p>
</div>
  