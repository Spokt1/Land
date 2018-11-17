<div style="margin:0px 50px 0px 50px;">
    @if($blogs)
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>№ п/п</th>
                <th>Имя</th>
                <th>Заголовок</th>
                <th>Позиция</th>
                <th>Изображение1</th>
                <th>Изображение2</th>
                <th>Текст</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($blogs as $k => $blog)
                <tr>
                    <td>{{$blog->id}}</td>
                    <td>  {!! Html::link(route('blogsEdit',['blogs'=>$blog->id]),$blog->name,['alt'=>$blog->name]) !!}  </td>
                    <td>{{$blog->title}}</td>
                    <td>{{$blog->pos}}</td>
                    <td>{!! Html::image('assets/img/'.$blog->images,'', array('style' => 'width:150px' )) !!}</td>
                    <td>{!! Html::image('assets/img/'.$blog->images2,'', array('style' => 'width:150px' )) !!}</td>
                    <td>{{$blog->text}}</td>
                    <td>

                        {!! Form::open(['url' => route('blogsEdit',['blogs'=>$blog->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
                        {{ method_field('DELETE') }}
                        {!! Form::button('Удалить', ['class' => 'btn btn-danger','type'=>'submit']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @endif

    {!! Html::link(route('blogsAdd'),'Новая страница') !!}
</div>