<style>
    .message{
    height: 7.5rem;
    background-color: Tomato;
    text-align: center;
    padding-top: 20px;
  }
</style>

@if (session('message'))
    <div class="message">
        <h3>{{session('message')}}</h3>
        <a href="/admindashbord">Goback</a>
    </div>
@endif