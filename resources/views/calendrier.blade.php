@extends('modele')


@section('content')
<table class="table table-bordered">
    <caption>Juillet 2024</caption>
    <tr class="weekdays">
      <th scope="col">Lundi</th>
      <th scope="col">Mardi</th>
      <th scope="col">Mercredi</th>
      <th scope="col">Jeudi</th>
      <th scope="col">Vendredi</th>
      <th scope="col">Samedi</th>
      <th scope="col">Dimanche</th>
    </tr>
  
    <tr class="days">
      <td class="day other-month">
        <div class="date">22</div>
      </td>
      <td class="day other-month">
        <div class="date">23</div>
        <div class="event">
          <div class="event-desc">
            HTML 5 lecture with Brad Traversy from Eduonix
          </div>
          <div class="event-time">
            1:00pm to 3:00pm
          </div>
        </div>
      </td>
      <td class="day other-month">
        <div class="date">24</div>
      </td>
      <td class="day other-month">
        <div class="date">25</div>
      </td>
      <td class="day other-month">
        <div class="date">26</div>
      </td>
  
  
      <td class="day other-month">
        <div class="date">27</div>
      </td>
      <td class="day other-month">
        <div class="date">28</div>
        <div class="event">
          <div class="event-desc">
            Career development @ Community College room #402
          </div>
  
          <div class="event-time">
            2:00pm to 5:00pm
          </div>
        </div>
        <div class="event">
          <div class="event-desc">
            Test event 2
          </div>
  
          <div class="event-time">
            5:00pm to 6:00pm
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td class="day other-month">
        <div class="date">29</div>
      </td>
      <td class="day other-month">
        <div class="date">30</div>
      </td>
      <td class="day other-month">
        <div class="date">31</div>
      </td>
      <td class="day">
        <div class="date">1</div>
      </td>
      <td class="day">
        <div class="date">2</div>
        <div class="event">
          <div class="event-desc">
            Group Project meetup
          </div>
          <div class="event-time">
            6:00pm to 8:30pm
          </div>
        </div>
      </td>
      <td class="day">
        <div class="date">3</div>
      </td>
      <td class="day">
        <div class="date">4</div>
      </td>
    </tr>
    <tr>
      <td class="day">
        <div class="date">5</div>
      </td>
      <td class="day">
        <div class="date">6</div>
      </td>
      <td class="day">
        <div class="date">7</div>
      </td>
      <td class="day">
        <div class="date">8</div>
      </td>
      <td class="day">
        <div class="date">9</div>
        <div class="event">
          <div class="event-desc">
            Board Meeting
          </div>
          <div class="event-time">
            1:00pm to 3:00pm
          </div>
        </div>
      </td>
      <td class="day">
        <div class="date">10</div>
      </td>
      <td class="day">
        <div class="date">11</div>
      </td>
    </tr>
  
  </table>

@endsection