@php
$answer_options = $answer_options ?? [
  [
    'text' => 'консоль выдаст Result = .........'
  ],
  [
    'text' => 'консоль выдаст Error ..............'
  ],
  [
    'text' => 'приложение не запустится'
  ],
  [
    'text' => 'приложение не крашнется'
  ],
]
@endphp
<div class="form-wrapper">
  <div class="main-form">
    <div class="container">
      <div class="main-form_title">
        <h3>Что произойдет, если entityName будет названием несуществующей таблицы </h3>
      </div>
      <div class="main-form_content">
        <form action="">
          <input type="text" size="400" name="text-field" id="textField">
            @foreach($answer_options as $option)
              <div class="form-group">
                <label class="custom-radio-button">
                  <input type="radio" name="option" id="option-1" class="option">
                  <span class="checkmark"></span>
                </label>
                <span class="option-text">
                  {{$option['text']}}
                </span>
              </div>
            @endforeach
          <div class="submitBtn_wrapper">
            <button class="submitBtn">следующий вопрос</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
