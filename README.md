# R-Style LAB

## SQL 
### Вопрос 1
Существуют две таблицы А и B, в каждой только одна колонка  cо значениями. 
В таблице А A1(1,2,3)  в таблице B B1(2,4,5). 
Какая выборка будет получена при выполнении следующих запросов? 
* Запрос 1
  ```sql 
  Select A1,B1 from A inner join B on A1=B1
  ```
  | A1 | B1 |
  | --- | --- |
  | 2 | 2 |
  
* Запрос 2
  ```sql 
  select A1,B1 from A left outer join B on A1=B1
  ```
  | A1 | B1 |
  | --- | --- |
  | 2 | 2 |
  | 1 | null |
  | 3 | null |
* Запрос 3
  ```sql 
  select A1,B1 from A right outer join B on A1=B1
  ```
  | A1 | B1 |
  | --- | --- |
  | 2 | 2 |
  | null | 4 |
  | null | 5 |
* Запрос 4
  ```sql 
  select A1,B1 from A full outer join B on A1=B1
  ```
  | A1 | B1 |
  | --- | --- |
  | 2 | 2 |
  | null | 4 |
  | null | 5 |
  | 2 | 2 |
  | 1 | null |
  | 3 | null |
  
### Вопрос 2
В каком порядке будут расположены значения в запросе select * from  B order by B1?  
Значения в таблице 1,2,8,12, 21,24. Если колонка B1 имеет 
1.	Числовой тип
2.	Текстовый тип
Ответ:
1.	1, 2, 8, 12, 21, 24
2.	1, 12, 2, 21, 24, 8

  


### Вопрос 4
Какие записи выведет запрос, если в таблице А мы имеем значения A1(1,2,3,4,4,5,5,5,7,8)  
и запрос имеет следующий вид select A1 from A group by A1 having count(\*)>=2?
Ответ:
| A1 |
| --- | 
| 4 | 
| 5 | 





Markdown | Less | Pretty
--- | --- | ---
*Still* | `renders` | **nicely**
1 | 2 | 3

 № | SQL
--- | --- 
а. |   ```Select A1,B1 from A inner join B on A1=B1 `````` 



b.	Select A1,B1 from A left outer join B on A1=B1
c.	Select A1,B1 from A right outer join B on A1=B1
d.	Select A1,B1 from A full outer join B on A1=B1
