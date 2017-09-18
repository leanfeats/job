@extends('default')
@section('content')
<form class="form" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="skill1" class="">Skill 1</label>
		<input class="form-control" type="text" name="skill1">
		<fieldset class="rating">
			<legend>Please rate:</legend>
			<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
			<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
			<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
			<input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
			<input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
		</fieldset>
		<button type="submit">Submit</button>
	</div>
</form>
@endsection
