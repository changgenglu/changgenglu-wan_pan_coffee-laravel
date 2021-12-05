@extends('layouts.main')

@section('title')
    珈琲體驗 | 手沖珈琲體驗
@endsection

@section('content')
    <section>
        <div id="topimg">
            <img src="/img/手沖.jpg" alt="杯測" class="img-fluid rounded" style="width: 960px;">
        </div>
        <div id="myText">

            <h1>手沖咖啡體驗</h1>
            <p>（一對一咖啡體驗課程 同步接受預約中 請來電預約上課）</p>
            <p>你想學手沖咖啡！</p>
            <p>你想學習 淺焙 中焙 深焙 該如何對應的沖煮技巧！</p>
            <p>你想知道手沖咖啡、虹吸式咖啡、摩卡壺、法式濾壓壺、沖煮差異！</p>
            <p>你想用心為自己煮杯咖啡！</p>
            <p>你想為心愛的人煮杯咖啡！</p>
            <p>你想為咖啡夢 尋找第一把鑰匙！</p>
            <p>手沖咖啡世界</p>
            <p>看似簡單其實不簡單</p>
            <p>一把咖啡壺 一壺熱水 一包咖啡豆</p>
            <p>卻需要不間斷的練習</p>
            <p>才能成就一杯好咖啡</p>
            <p>歡迎你加入我們</p>

            <p>預約請撥：0806-449-449，或來函：wanpan_wunai@gmail.com</p>

            <div>
                <span><a style="color: white;" href="{{ url('/contact') }}">[聯絡萬般]</a></span>
            </div>

        </div>
    </section>
@endsection


