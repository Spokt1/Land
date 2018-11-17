<div class="wrapper container-fluid">

    {!! Form::open(['url' => route('blogsStore'),'class'=>'form-horizontal','method'=>'POST']) !!}

 	<div class="form-group">

        {!! Form::label('title','Заголовок',['class' => 'col-xs-2 control-label'])   !!}
        <div class="col-xs-8">
            {!! Form::text('title',old('title'),['class' => 'form-control','placeholder'=>'Введите заголовок'])!!}
        </div>

    </div>
    <div class="form-group">

        {!! Form::label('name','Имя',['class' => 'col-xs-2 control-label'])   !!}
        <div class="col-xs-8">
            {!! Form::text('name',old('name'),['class' => 'form-control','placeholder'=>'Ввежите имя'])!!}
        </div>

    </div>
    <div class="form-group">

        {!! Form::label('date','Дата',['class' => 'col-xs-2 control-label'])   !!}
        <div class="col-xs-8">
            {!! Form::date('date',old('date'),['class' => 'form-control'])!!}
        </div>

    </div>
<div class="form-group">

        {!! Form::label('pos','Позиция',['class' => 'col-xs-2 control-label'])   !!}
        <div class="col-xs-8">
            {!! Form::text('pos',old('pos'),['class' => 'form-control','placeholder'=>'Введите занимаемую должность'])!!}
        </div>

    </div>



    <div class="form-group">
        {!! Form::label('text', 'Текст:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::textarea('text', old('text'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Введите текст страницы']) !!}
        </div>
    </div>

   <div class="form-group">
        {!! Form::label('images', 'Изображение:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::file('images', ['class' => 'filestyle','data-buttonText'=>'Выберите изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет"]) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('images2', 'Изображение2:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::file('images2', ['class' => 'filestyle','data-buttonText'=>'Выберите второе изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет"]) !!}
        </div>
    </div>


    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            {!! Form::button('Сохранить', ['class' => 'btn btn-primary','type'=>'submit']) !!}
        </div>
    </div>



    {!! Form::close() !!}

    <script>
        CKEDITOR.replace('editor');
    </script>

</div>