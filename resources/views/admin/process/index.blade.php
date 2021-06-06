<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="{{ secure_asset('css/process.css') }}" rel="stylesheet">
    <style>
        .gantt__row {
            grid-template-columns: 150px 1fr;
        }
 
        .gantt__row--lines {
            grid-template-columns: 150px repeat({{$days}}, 1fr);
        }
 
        .gantt__row--months {
            grid-template-columns: 150px repeat({{$days}}, 1fr);
        }
        
        .gantt__row-bars {
            grid-template-columns: repeat({{$days}}, 1fr);
        }
    </style>
</head>
  <div class="wrapper">
  <div class="header">

  </div>
  　 <div class="gantt">
        <div class="gantt__row gantt__row--months">
        <div class="gantt__row-first"></div>
        @for ($i = 0; $i < $days; $i++)
        <span>{{$i}}</span>
        @endfor
        </div>
        <?php $count = 1; ?>
        @foreach($posts as $processSheet)
        <div class="gantt__row">
          <div class="gantt__row-first">
          {{ $processSheet->work_type }}
          </div>
          <ul class="gantt__row-bars">
          <li style="grid-column: {{$count}}/{{$count+=ceil(($processSheet->quantity)/($processSheet->workload))}}; background-color: #2ecaac;">{{ $processSheet->category }}
          </li>
          </ul>
        </div>
        @endforeach
    </div>
</html>


