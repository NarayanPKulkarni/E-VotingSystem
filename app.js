new fullpage('#fullpage',{
	autoScrolling: true,
	navigation: true,
			// onLeave: (origin, destination, direction) =>{
		// 	const section = destination.item;

	// 	if(destination.index === 0)
	// 	{
	// 	const jumbo = section.querySelector('#welcome');
	// 	const t1 = new TimelineMax({delay:0.5});
	// 	t1.fromTo(jumbo, 0.5, {y:50, opacity:0},{y:0, opacity:1});
	// 	}

	// if(destination.index === 1)
	// {
	// 	const img = section.querySelector('#vote_img');
	// 	const t1 = new TimelineMax({delay:0.5});
	//  	t1.fromTo(img, 0.5, {x:"100%", opacity:0},{x:"-30%", opacity:1});
	// }
	
})