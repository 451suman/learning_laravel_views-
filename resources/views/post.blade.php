@extends('layouts.masterlayout')

@section('title')
post
@endsection

{{-- sending message to top of page --}}
@section('top_content')
@parent
<h6>this is message from post.blabe.php which is send using @ section() 
    <br>
    <a href="www.youtube.com"></a>
</h6>
@endsection


@section('content')
<h1 class="center">POST</h1>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque error placeat praesentium voluptatibus doloribus reiciendis exercitationem aut sapiente asperiores. Minus unde libero consequatur dolorum vel perferendis deleniti. Eos, possimus impedit totam numquam dolorem harum maiores, tenetur sequi nisi sed aperiam voluptatem explicabo! Doloremque alias eos quia accusamus nisi nesciunt neque asperiores at sint quae laborum ab expedita numquam maiores necessitatibus unde quasi sequi tenetur, illo velit ullam. Pariatur inventore perspiciatis saepe quod architecto voluptates debitis! Optio id qui unde itaque modi officia quidem adipisci rerum. Dolorem, quo! Eum molestiae aut ullam autem enim nobis reiciendis odio quasi, deserunt ad! Nisi.
@endsection



