# R-Style LAB

## SQL 
### Вопрос 1
Существуют две таблицы А и B, в каждой только одна колонка  cо значениями. 
В таблице А A1(1,2,3)  в таблице B B1(2,4,5). 
Какая выборка будет получена при выполнении следующих запросов? 

Markdown | Less | Pretty
--- | --- | ---
*Still* | `renders` | **nicely**
1 | 2 | 3

 № | SQL
--- | --- 
а. |   ``` Select A1,B1 from A inner join B on A1=B1 `````` 



b.	Select A1,B1 from A left outer join B on A1=B1
c.	Select A1,B1 from A right outer join B on A1=B1
d.	Select A1,B1 from A full outer join B on A1=B1
