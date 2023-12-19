@extends('layouts.masterlayout')

@section('title')
home
@endsection

@section('content')

<h1 class="center" id="home_heading">HOME</h1>
<p>    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque error placeat praesentium voluptatibus doloribus reiciendis exercitationem aut sapiente asperiores. Minus unde libero consequatur dolorum vel perferendis deleniti. Eos, possimus impedit totam numquam dolorem harum maiores, tenetur sequi nisi sed aperiam voluptatem explicabo! Doloremque alias eos quia accusamus nisi nesciunt neque asperiores at sint quae laborum ab expedita numquam maiores necessitatibus unde quasi sequi tenetur, illo velit ullam. Pariatur inventore perspiciatis saepe quod architecto voluptates debitis! Optio id qui unde itaque modi officia quidem adipisci rerum. Dolorem, quo! Eum molestiae aut ullam autem enim nobis reiciendis odio quasi, deserunt ad! Nisi.</p>
<p id="change">    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque error placeat praesentium voluptatibus doloribus reiciendis exercitationem aut sapiente asperiores. Minus unde libero consequatur dolorum vel perferendis deleniti. Eos, possimus impedit totam numquam dolorem harum maiores, tenetur sequi nisi sed aperiam voluptatem explicabo! Doloremque alias eos quia accusamus nisi nesciunt neque asperiores at sint quae laborum ab expedita numquam maiores necessitatibus unde quasi sequi tenetur, illo velit ullam. Pariatur inventore perspiciatis saepe quod architecto voluptates debitis! Optio id qui unde itaque modi officia quidem adipisci rerum. Dolorem, quo! Eum molestiae aut ullam autem enim nobis reiciendis odio quasi, deserunt ad! Nisi.</p>
@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@push('script')
    <script src="js/example.js"></script>
@endpush
@push('scripts')
   
@endpush
