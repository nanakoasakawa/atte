<table>
  <tr>
    <th>{{date('Y-m-d')}}</th>
  </tr>

  <table>
    <thead>
      <tr>
        <th>勤務開始</th>
        <th>勤務終了</th>
        <th>休憩時間</th>
        <th>勤務時間</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($items as $item)
        <td>{{$item->getDetail1()}}</td>
        <td>{{$item->getDetail2()}}</td>
        <td>{{$item->getDetail3()}}</td>
        <td>{{$item->getDetail2()}}</td>
      </tr>
        @endforeach
    </tbody>
  </table>
  {{$items->links()}}
</table>

