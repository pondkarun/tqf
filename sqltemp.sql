SELECT 
* ,


(
SELECT COUNT(a.id)  FROM dbcourse_add AS  a 
INNER JOIN db_mko3_1 AS mk1 ON a.id = mk1.id_mko
INNER JOIN db_mko3_2 AS mk2 ON a.id = mk2.id_mko
INNER JOIN db_mko3_3 AS mk3 ON a.id = mk3.id_mko
INNER JOIN db_mko3_4 AS mk4 ON a.id = mk4.id_mko
INNER JOIN db_mko3_5 AS mk5 ON a.id = mk5.id_mko
INNER JOIN db_mko3_6 AS mk6 ON a.id = mk6.id_mko
INNER JOIN db_mko3_7 AS mk7 ON a.id = mk7.id_mko
 WHERE a.id = aa.id
) AS COUNT_MKO3,

(
SELECT COUNT(a.id)  FROM dbcourse_add AS  a 
INNER JOIN db_mko4_1 AS mk1 ON a.id = mk1.id_mko
INNER JOIN db_mko4_2 AS mk2 ON a.id = mk2.id_mko
INNER JOIN db_mko4_3 AS mk3 ON a.id = mk3.id_mko
INNER JOIN db_mko4_4 AS mk4 ON a.id = mk4.id_mko
INNER JOIN db_mko4_5 AS mk5 ON a.id = mk5.id_mko
INNER JOIN db_mko4_6 AS mk6 ON a.id = mk6.id_mko
INNER JOIN db_mko4_7 AS mk7 ON a.id = mk7.id_mko
 WHERE a.id = aa.id
) AS COUNT_MKO4,


(
SELECT COUNT(a.id)  FROM dbcourse_add AS  a 
INNER JOIN db_mko5_1 AS mk1 ON a.id = mk1.id_mko
INNER JOIN db_mko5_2 AS mk2 ON a.id = mk2.id_mko
INNER JOIN db_mko5_3 AS mk3 ON a.id = mk3.id_mko
INNER JOIN db_mko5_4 AS mk4 ON a.id = mk4.id_mko
INNER JOIN db_mko5_5 AS mk5 ON a.id = mk5.id_mko
INNER JOIN db_mko5_6 AS mk6 ON a.id = mk6.id_mko
 WHERE a.id = aa.id
) AS COUNT_MKO5,


(
SELECT COUNT(a.id)  FROM dbcourse_add AS  a 
INNER JOIN db_mko6_1 AS mk1 ON a.id = mk1.id_mko
INNER JOIN db_mko6_2 AS mk2 ON a.id = mk2.id_mko
INNER JOIN db_mko6_3 AS mk3 ON a.id = mk3.id_mko
INNER JOIN db_mko6_4 AS mk4 ON a.id = mk4.id_mko
INNER JOIN db_mko6_5 AS mk5 ON a.id = mk5.id_mko
INNER JOIN db_mko6_6 AS mk6 ON a.id = mk6.id_mko
 WHERE a.id = aa.id
) AS COUNT_MKO6




FROM dbcourse_add AS  aa