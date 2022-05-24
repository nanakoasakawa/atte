<table>
  <tr>
    <th><input type="date", name="kitanidate", value="2022-04-01",min="2021-01-01",max="2026-01-01"> </th>
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
        <td>{{$item->getstart()}}</td>
        <td>{{$item->getend()}}</td>
        <td>{{$item->getrest()}}</td>
        <td>{{$item->gettime()}}</td>
        @endforeach

      </tr>

    </tbody>
  </table>
  {{$items->links()}}
</table>

