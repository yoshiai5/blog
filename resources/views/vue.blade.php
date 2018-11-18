@extends('layouts.default')

@section('title', 'Vue')

@section('content')
        <!-- example-component はLaravelに入っているサンプルのコンポーネント -->
        <example-component></example-component>
            <!-- div id="app"の中にコンポーネントを書くのが必須 -->
            <!-- default.blade.phpの大枠にid="app"を指定することで、それを満たす。 -->

        <br>
        {{-- 関連付けとnew Vue()はapp.jsで行う --}}
        {{-- id="app"のルート設置はdefault.blade.phpに設置している --}}
        {{-- bladeファイルには、『.vue』を定義したものを差し込むのみ --}}
        <vue0-component></vue0-component>
        <br>
        <vue1-component></vue1-component>
        <br>
        <vue2-component></vue2-component>
        <br>
        <vue3-component></vue3-component>
        <br>
        <vue4-component></vue4-component>
        <br>
        <vue5-component></vue5-component>
        <br>
        <vue6-component></vue6-component>
        <br>
        <h2>count</h2>
        <vue7-component></vue7-component>
        <vue7-component></vue7-component>
        <vue7-component></vue7-component>
        <br>
        <h2>count:unique</h2>
        <vue8-component message="Like"></vue8-component>
        <vue8-component message="Awesome"></vue8-component>
        <vue8-component message="Great"></vue8-component>
        {{-- コンポーネント側からのデフォルト値を表示する場合 --}}
        <vue8-component></vue8-component>
        <br>
        {{-- <h2>Total Likes:{{ total }}</h2> --}}
        <h2>Total Likes:@{{ total }}</h2>
            {{-- bladeの中でcomponentの変数？を展開する場合は『@』を付ける --}}

        {{-- Component に v-on で increment を仕込み、 increment が呼ばれたときには app の方の incrementTotal を実行する。 --}}
        <vue9-component message="Like" @increment="incrementTotal"></vue9-component>
        <vue9-component message="Awesome" @increment="incrementTotal"></vue9-component>
        <vue9-component message="Great" @increment="incrementTotal"></vue9-component>
        <vue9-component @increment="incrementTotal"></vue9-component>
@endsection
