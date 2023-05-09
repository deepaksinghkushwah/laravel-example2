@extends("layouts.main")
@section("content")
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum unde doloribus quod repellendus. Nobis et obcaecati reiciendis voluptatum amet dolor non libero similique facere fugiat aliquid error eum ullam voluptate odit eaque veniam soluta odio cumque expedita, ipsam ratione provident totam. Aspernatur magni sint, nobis deleniti numquam, natus doloremque sunt laboriosam quasi minus nisi perspiciatis repudiandae odio fuga quae eius necessitatibus mollitia, velit expedita doloribus illum magnam maxime tempora deserunt. Earum, quibusdam consequuntur? Omnis, sint. Reprehenderit ut voluptas atque quod, iusto nobis facere! Mollitia libero nulla natus saepe illo itaque laboriosam, molestias temporibus in, esse cum explicabo veritatis sunt excepturi.</p>

<form action="" method="post">
    @csrf
    <input type="text" name="firstname" id="">
    <button type="submit">SubmitForm</button>
</form>

@endsection


@section("title","Welcome Page")
