WITH RECURSIVE
loop(s,i,accum) AS (VALUES((select group_concat(nome,'') from (select nome from procedimentos limit 5000)), 1, 0) UNION ALL
	 SELECT s, i+1, (accum+unicode(substr(s,i,1)))%256 FROM loop WHERE i<=71905)
SELECT accum FROM loop WHERE i=71906;
