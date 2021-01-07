<!DOCTYPE html>
<html>
  <link href="{{ secure_asset('css/process.css') }}" rel="stylesheet">
    <div class="wrapper">
  　<div class="header">

  　</div>
  　<div class="gantt">
    <div class="gantt__row gantt__row--months">
      <div class="gantt__row-first"></div>
      <span>30日</span><span>60日</span><span>90日</span>
      <span>120日</span><span>150日</span><span>180日</span>
      <span>210日</span><span>240日</span><span>270日</span>
      <span>300日</span><span>330日</span><span>360日</span>
    </div>
    <div class="gantt__row gantt__row--lines" data-month="5">
      <span></span><span></span><span></span>
      <span></span><span></span><span></span>
      <span></span><span class="marker"></span><span></span>
      <span></span><span></span><span></span>
    </div>
    @foreach($posts as $processSheet)
    <div class="gantt__row">
      <div class="gantt__row-first">
        {{$processSheet->work_type}}
      </div>
      <ul class="gantt__row-bars">
        <li style="grid-column: 4/11; background-color: #2ecaac;">ディレクション</li>
      </ul>
    </div>
    @endforeach
  </div>
</html>