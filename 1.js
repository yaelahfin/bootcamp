function biodata(){
	data = {
		name : "Muhammad Arifin Lubis",
		age : 18,
		address : "Dewantara , Aceh , Aceh utara",
		hobbies : ['nyanyi','game'],
		is_married : false,
		list_school : [
			{
				name : "SD 2 dewantara",
				year_in : 2007,
				year_out : 2013,
				major : null
			},
			{
				name : "smp n 1 dewantara",
				year_in : 2013,
				year_out: 2016,
				major : null,
			},
			{
				name : "sma n 1 dewantara"
				year_in : 2016,
				year_out : 2019,
				major : null,
			},
		],

		skills : [
			{
				name : "jaringan",
				level : "beginner",
			},

			{
				name : "design",
				level : "advanced"
			},
		],
	interest_in_coding : true,
	}

	return data;
}

console.log(biodata())