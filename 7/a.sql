select nama.name,work.name as work,kategori.name as kategori from nama
inner join hobby on nama.id_work = work.id
inner join category on nama.id_kategori = kategori.id
order by nama.id