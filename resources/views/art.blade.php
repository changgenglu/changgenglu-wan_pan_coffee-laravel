@extends('layouts.main')

@section('title')
    珈琲體驗 | 拿鐵拉花
@endsection

@section('content')
    <section>
        <div id="topimg">
            <img src="/img/天鵝和菜單.jpg" alt="杯測" class="img-fluid rounded" style="width: 960px;">
        </div>
        <div id="myText">

            <h1>拿鐵拉花體驗</h1>
            <p>（一對一咖啡體驗課程 同步接受預約中 請來電預約上課）</p>
            <p>你想學咖啡拉花！</p>
            <p>你想知道美麗的天鵝拉花如何形成！</p>
            <p>你想用心為自己煮杯咖啡！</p>
            <p>你想為心愛的人煮杯咖啡！</p>


            <p>歡迎你加入我們</p>

            <p>預約請撥：0806-449-449，或來函：wanpan_wunai@gmail.com</p>

            <div>
                <span><a style="color: white;" href="{{ url('/contact') }}">[聯絡萬般]</a></span>
            </div>

        </div>
    </section>
@endsection


