<h1>Home:first page</h1>
{{5+2}}
<br>
{{" myshyakhwo"}}
<br>
{{" <h1>myshyakhwo</h1>"}}
<br>
{!!" <h1>myshyakhwo</h1>"!!}
<br>
{{" <script>alert('myshyakhwo');</script>"}}
<br>
{!!" <script>alert('myshyakhwo');</script>"!!}

@php
    $name='suman';
@endphp
{{$name}}
<br>
{{-- for each --}}
@php
    $name_array=['suman','mushyakhwo','asdjbasjdbajs']
@endphp
<ul>

    @foreach ($name_array as $a )
    <li>{{$a}}</li>
    
    @endforeach
</ul>
<ul>

    @foreach ($name_array as $a )
    <li>{{$loop->remaining}}{{$a}}</li>
    
    @endforeach
</ul>
<ul>

    @foreach ($name_array as $a )
    @if ($loop->first)
        
    <li style="color:aqua;">{{$a}} <br>{{"first array name"}}</li>
    @elseif ($loop->last)
    <li style="color:red;">{{$a}} <br> {{"last array name"}}</li>
    @endif
    
    @endforeach
</ul>



