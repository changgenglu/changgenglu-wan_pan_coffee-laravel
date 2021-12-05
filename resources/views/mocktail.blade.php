@extends('layouts.main')

@section('title')
    珈琲體驗 | 珈琲特調體驗
@endsection

@section('content')
    <section>
        <div id="topimg">
            <img src="/img/吧檯.jpg" alt="杯測" class="img-fluid rounded">
        </div>
        <div id="myText">

            <h1>咖啡特調體驗</h1>
            <p>（一對一咖啡體驗課程 同步接受預約中 請來電預約上課）</p>
            <p>你想當咖啡師！</p>
            <p>當咖啡師可不只有手沖咖啡跟拿鐵拉花！</p>
            <p>搭配不同的材料做出獨一無二的咖啡特調！</p>
            <p>從傳統特調到自創咖啡飲品</p>
            <p>我們將一步一步帶領你找出屬於自己的一杯！</p>

            <p>歡迎你加入我們</p>

            <p>預約請撥：0806-449-449，或來函：wanpan_wunai@gmail.com</p>

            <div>
                <span><a style="color: white;" href="{{ url('/contact') }}">[聯絡萬般]</a></span>
            </div>

        </div>
    </section>
@endsection


