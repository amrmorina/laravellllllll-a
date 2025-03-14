<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>abt</h1>
    <?php
        echo $name;
    ?>
    {{
        $name
    }}

    <br>

    <p>{{$username}}</p>
    <p>{{$email}}</p>
    <p>{{$adress[0]}}</p>
    <p>{{$age}}</p>


    
    {{--Kushtet, if edhe elseif, Switch--}}
    @if(isset($username))
        <h1>Welcome {{$username }}</h1>
    @else
        <h1>Welcome Guest</h1>
    @endif

     @if(isset($username) && strstr($username, '4'))
        <h1>Welcome {{$username }}</h1>
    @elseif(strlen($username)>10)
        <h1>Welcome to long user</h1>
    @else
        <h1>Welcome Guest</h1>
    @endif


    {{-- Switch --}}
    @switch($age)
        @case(10)
            <p>Nen 18</p>
            @break
        @case(18)
            <p>18 vjeq</p>
            @break
        @default
            <p>Mbi 18 vjet</p>
    @endswitch
    <br>
   
    @for($x=0;$x<=10;$x++)
        <p> {{$x}}</p>
    @endfor


    <br>

    @php
        $x=0
    @endphp

    <br>
    @while ($x <= 10)
        {{$x}},
        @php
        $x++;       
        @endphp 
    @endwhile

    <br>
    
    @php
        echo implode(",",$adress);
    @endphp

    <br>

    @foreach ($adress as $add) 
        {{$add}},
    @endforeach

    <br>

    @forelse($adress as $add)
        {{$add}},
    @empty
    <p>Eshte e zbrazet</p>
    @endforelse

    @auth
    <p>I am authenticated</p>
    @endauth

    @Guest
        <p>I am not authenticated</p>
    @endguest
        
    
        
   
    
</body$record
</html>