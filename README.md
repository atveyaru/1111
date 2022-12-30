# R-Style LAB

## SQL 

### Вопрос 1
Существуют две таблицы А и B, в каждой только одна колонка cо значениями. 
В таблице А A1(1,2,3) в таблице B B1(2,4,5). 
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
В каком порядке будут расположены значения в запросе ```select * from  B order by B1```?  

Значения в таблице 1, 2, 8, 12, 21, 24. Если колонка B1 имеет 
<ol type="a">
  <li>Числовой тип</li>
  <li>Текстовый тип</li>
</ol>
Ответ:
<ol type="a">
  <li>1, 2, 8, 12, 21, 24</li>
  <li>1, 12, 2, 21, 24, 8</li>
</ol>


### Вопрос 3
Какую дату выведет запрос ``` select trunc(to_date(’10.05.2006’,’DD.MM.YYYY’),’YYYY’) from dual ``` ?

Ответ: 01.01.2006



### Вопрос 4
Какие записи выведет запрос, если в таблице А мы имеем значения ``` A1 ( 1, 2, 3, 4, 4, 5, 5, 5, 7, 8)```  
и запрос имеет следующий вид ```select A1 from A group by A1 having count(\*)>=2```?

Ответ:
| A1 |
| --- | 
| 4 | 
| 5 | 



### Вопрос 5
Две таблицы Клиенты (Идентификатор клиента, Название клиента) 
и Договора (Идентификатор договора, Номер договора, Код клиента) этих клиентов. 
Напишите запрос (два варианта), который выведет названия всех клиентов у которых нет ни одного договора. 

Ответ:
```sql 
with clients as (
  select 1 as id, 'Иванов Иван' name from dual
  union select 2, 'Петров Петр' from dual
  union select 3, 'Сидоров Сидр' from dual
  union select 4, 'Ошибков Эрр' from dual
), 
orders as (
  select 1 as id, 'договор 001' as code, 1 client_id from dual
  union select 2, 'договор 002', 1  from dual
  union select 3, 'договор 003', 2  from dual
  union select 4, 'договор 004', 2  from dual
  union select 5, 'договор 005', 2  from dual
  union select 6, 'договор 006', 3  from dual
  union select 7, 'договор 000', 5  from dual
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



### Вопрос 6
Таблицы из задания 5, но нужно вывести сразу всех клиентов, которые не имеют договоров и все договора, которые не имеют своих клиентов или имеют ошибочные ссылки. (Номера договоров и Номера клиентов не должны находится в одной колонке)

Ответ:
```sql 
  select c.name, o.code from clients c 
  full outer join orders o on c.id = o.client_id 
  where o.client_id is null or c.id is null;
```



### Вопрос 7
Таблица A (A1,A2). A1-Первичный автоинкрементный ключ. Напишите DML оператор для вставки значений в таблицу. 

Ответ:
```sql 
  insert into A(A2) values ('1111');
```



### Вопрос 8
Таблица A (A1,A2) и таблица B(A1,B1). Напишите DML оператор который заменит значения в таблице А в колонке А2 на B1 
в том случае, если A2<B1. B.A1 – колонка внешнего  ключа на таблицу А.

Ответ:
```sql 
  update (select a.a2 as a2, 
                 b.b1 as b1
            from a_test a, b_test b
           where a.a1 = b.a1 
             and a.a2 < b.b1)
  set a2 = b1;
```


## PL/SQL 

### Вопрос 1
Как называется программный блок в Oracle 
```sql 
Declare 
A varchar2;
Begin
   Текст;
End;
```

Ответ:
так и называется - программный блок, ещё анонимный программный блок



### Вопрос 2
В чем отличие процедуры от пакета в базе данных Oracle? Чем выгоднее работать с пакетом.

Ответ:
* процедуру можно объявить и локально, пакет - нет.
* пакеты шустрее (кэшируют рез-ты)
* пакеты могут содержать свои составные типы
* в пакетах можно ораганизовать раздеоённый доступ к его процедурам



### Вопрос 3
Правильно ли написано выражение по работе с курсором. Если нет то почему?
```sql
LOOP
  FETCH c1 INTO my_ename, my_sal, my_hiredate;
  insert into A (Name,Salary) values (my_ename,my_sal);
END LOOP;   
``` 

Ответ: 
``` asdasd ```
правильно будет 
```sql
LOOP
  FETCH c1 INTO my_ename, my_sal, my_hiredate;
  insert into A (Name,Salary) values (my_ename,my_sal);
END LOOP;   
``` 



### Вопрос 4
Можно ли в запросе применить функцию, которая вставляет данные в таблицу? Если да, то, какие требования к такой функции?

Ответ:
* процедуру можно объявить и локально, пакет - нет.
* пакеты шустрее (кэшируют рез-ты)
* пакеты могут содержать свои составные типы
* в пакетах можно ораганизовать раздеоённый доступ к его процедурам



### Вопрос 5
Написать Текст программы используя оператор case. Если A>B то B=1 , если А=B то B=2 иначе B=3

Ответ: 
```sql
LOOP
  FETCH c1 INTO my_ename, my_sal, my_hiredate;
  insert into A (Name,Salary) values (my_ename,my_sal);
END LOOP;   
``` 



### Вопрос 6
Что такое табличная функция? Для чего она используется?

Ответ:
* процедуру можно объявить и локально, пакет - нет.
* пакеты шустрее (кэшируют рез-ты)
* пакеты могут содержать свои составные типы
* в пакетах можно ораганизовать раздеоённый доступ к его процедурам



### Вопрос 7
```sql
LOOP
  FETCH c1 INTO my_ename, my_sal, my_hiredate;
  insert into A (Name,Salary) values (my_ename,my_sal);
END LOOP;   
``` 
Чего не хватает в данном цикле?

Ответ: 
``` asdasd ```
правильно будет 
```sql
LOOP
  FETCH c1 INTO my_ename, my_sal, my_hiredate;
  insert into A (Name,Salary) values (my_ename,my_sal);
END LOOP;   
``` 



### Вопрос 8
```TYPE Staff IS TABLE of Material;``` 

Какого типа можеть быть  Material? (Перечислите)

1.	Varchar2
2.	Integer
3.	Long
4.	Record

Ответ: (все кроме Record)
* Varchar2
* Integer
* Long






