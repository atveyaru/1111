# R-Style LAB

## SQL 

<br>  
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
  
<br>  
### Вопрос 2
В каком порядке будут расположены значения в запросе select * from  B order by B1?  
Значения в таблице 1,2,8,12, 21,24. Если колонка B1 имеет 
<ol type="a">
  <li>Числовой тип</li>
  <li>Текстовый тип</li>
</ol>
Ответ:
<ol type="a">
  <li>1, 2, 8, 12, 21, 24</li>
  <li>1, 12, 2, 21, 24, 8</li>
</ol>


<br>  
### Вопрос 3
Какую дату выведет запрос ``` select trunc(to_date(’10.05.2006’,’DD.MM.YYYY’),’YYYY’) from dual? ```
Ответ: 01.01.2006


<br>  
### Вопрос 4
Какие записи выведет запрос, если в таблице А мы имеем значения A1(1,2,3,4,4,5,5,5,7,8)  
и запрос имеет следующий вид select A1 from A group by A1 having count(\*)>=2?
Ответ:
| A1 |
| --- | 
| 4 | 
| 5 | 


<br>  
### Вопрос 5
Две таблицы Клиенты (Идентификатор клиента, Название клиента) 
и Договора (Идентификатор договора, Номер договора, Код клиента) этих клиентов. 
Напишите запрос (два варианта), который выведет названия всех клиентов у которых нет ни одного договора. 
Ответ:
```sql 
with clients as (
  select 1 as id, 'Иванов Иван' name from dual
  union all select 2, 'Петров Петр' from dual
  union all select 3, 'Сидоров Сидр' from dual
  union all select 4, 'Ошибков Эрр' from dual
), 
orders as (
  select 1 as id, 'договор 001' as code, 1 client_id from dual
  union all select 2, 'договор 002', 1  from dual
  union all select 3, 'договор 003', 2  from dual
  union all select 4, 'договор 004', 2  from dual
  union all select 5, 'договор 005', 2  from dual
  union all select 6, 'договор 006', 3  from dual
  union all select 7, 'договор 000', 5  from dual
)
```
* вариант 1
  ```sql 
  select c.name from clients c 
  full outer join orders o on c.id = o.client_id 
  where o.client_id is null
  ```
* вариант 2
  ```sql 
  select c.name 
  from clients c, orders o
  where c.id = o.client_id(+)
    and o.client_id is null
  ```
* вариант 3 ;-))
  ```sql 
  select c.name 
   from clients c
  where 0 = (select count(*) 
               from orders 
              where client_id = c.id)
  ```




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
