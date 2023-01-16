# R-Style LAB

# Тест 1 (файл Тесты по PLSQL-SQL.DOC)

## SQL(Oracle) 

### Вопрос 1
Существуют две таблицы А и B, в каждой только одна колонка cо значениями. <br>
В таблице А A1(1,2,3) в таблице B B1(2,4,5). <br>
Какая выборка будет получена при выполнении следующих запросов? <br>
* Запрос 1
  ```sql 
  Select A1,B1 from A inner join B on A1=B1
  ```
  > **Ответ**  
  
  | A1 | B1 |
  | --- | --- |
  | 2 | 2 |
  
* Запрос 2
  ```sql 
  select A1,B1 from A left outer join B on A1=B1
  ```
  > **Ответ**  
  
  | A1 | B1 |
  | --- | --- |
  | 2 | 2 |
  | 1 | null |
  | 3 | null |
* Запрос 3
  ```sql 
  select A1,B1 from A right outer join B on A1=B1
  ```
  > **Ответ**  
  
  | A1 | B1 |
  | --- | --- |
  | 2 | 2 |
  | null | 4 |
  | null | 5 |
* Запрос 4
  ```sql 
  select A1,B1 from A full outer join B on A1=B1
  ```
  > **Ответ**  
  
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
В каком порядке будут расположены значения в запросе ```select * from  B order by B1```?  

Значения в таблице 1, 2, 8, 12, 21, 24. Если колонка B1 имеет 
<ol type="a">
  <li>Числовой тип</li>
  <li>Текстовый тип</li>
</ol>

> **Ответ**  

 <ol type="a">
   <li>1, 2, 8, 12, 21, 24</li>
   <li>1, 12, 2, 21, 24, 8</li>
  </ol>



<br>

### Вопрос 3

Какую дату выведет запрос ``` select trunc(to_date(’10.05.2006’,’DD.MM.YYYY’),’YYYY’) from dual ``` ?

> **Ответ:**  **01.01.2006**



<br>

### Вопрос 4
Какие записи выведет запрос, если в таблице А мы имеем значения ``` A1 ( 1, 2, 3, 4, 4, 5, 5, 5, 7, 8)```  
и запрос имеет следующий вид ```select A1 from A group by A1 having count(\*)>=2```?

> **Ответ**

| A1 |
| --- | 
| 4 | 
| 5 | 



<br>

### Вопрос 5
Две таблицы Клиенты (Идентификатор клиента, Название клиента) 
и Договора (Идентификатор договора, Номер договора, Код клиента) этих клиентов. 
Напишите запрос (два варианта), который выведет названия всех клиентов у которых нет ни одного договора. 

> **Ответ**

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



<br>

### Вопрос 6
Таблицы из задания 5, но нужно вывести сразу всех клиентов, которые не имеют договоров и все договора, которые не имеют своих клиентов или имеют ошибочные ссылки. (Номера договоров и Номера клиентов не должны находится в одной колонке)

> **Ответ**

```sql 
  select c.name, o.code from clients c 
  full outer join orders o on c.id = o.client_id 
  where o.client_id is null or c.id is null;
```



<br>

### Вопрос 7
Таблица A (A1,A2). A1-Первичный автоинкрементный ключ. Напишите DML оператор для вставки значений в таблицу. 

> **Ответ**

```sql 
  insert into A(A2) values ('1111');
```



<br>

### Вопрос 8
Таблица A (A1,A2) и таблица B(A1,B1). Напишите DML оператор который заменит значения в таблице А в колонке А2 на B1 
в том случае, если A2<B1. B.A1 – колонка внешнего  ключа на таблицу А.

> **Ответ**

```sql 
  update (select a.a2 as a2, 
                 b.b1 as b1
            from a_test a, b_test b
           where a.a1 = b.a1 
             and a.a2 < b.b1)
  set a2 = b1;
```



<br>

## PLSQL(Oracle)

### Вопрос 1
Как называется программный блок в Oracle 
```sql 
Declare 
A varchar2;
Begin
   Текст;
End;
```

> **Ответ:**  так и называется - программный блок, ещё анонимный программный блок



<br>

### Вопрос 2
В чем отличие процедуры от пакета в базе данных Oracle? Чем выгоднее работать с пакетом.

> **Ответ** 

* процедуру можно объявить и локально, пакет - нет.
* пакеты шустрее (кэшируют результаты)
* пакеты могут содержать свои составные типы
* в пакетах можно ораганизовать распределённый доступ к его процедурам и функциям



<br>

### Вопрос 3
Правильно ли написано выражение по работе с курсором. Если нет то почему?
```sql
LOOP
For c from (select * from Clients) Loop
  Insert into Clients_log (Name, text) values (c.ClientsName,c.text);
End loop;
``` 

> **Ответ**

IN, а не FROM
```sql
BEGIN
   FOR c IN (select * from Clients)
   LOOP
     INSERT INTO Clients_log (Name, text) VALUES (c.ClientsName,c.text);
   END LOOP;
END;
``` 



<br>

### Вопрос 4
Можно ли в запросе применить функцию, которая вставляет данные в таблицу? Если да, то, какие требования к такой функции?

> **Ответ**

* DML внутри функций - ЗЛО <br>
* запускать ей можно только внутри автономной транзакции <br>



<br>

### Вопрос 5
Написать Текст программы используя оператор case. Если A>B то B=1 , если А=B то B=2 иначе B=3

> **Ответ**

```sql
DECLARE
  tmp_a number := 0;
  tmp_b number := 0;
  FUNCTION compare_case(p_a IN number, p_b IN number) RETURN VARCHAR2 IS
  BEGIN
    RETURN
    CASE 
    WHEN p_a > p_b THEN 1
    WHEN p_a = p_b THEN 2
    ELSE 3
    END;
  END;
BEGIN
  tmp_a := 7;
  tmp_b := 10;
  DBMS_OUTPUT.PUT_LINE(compare_case(tmp_a, tmp_b));
END; 
``` 



<br>

### Вопрос 6
Что такое табличная функция? Для чего она используется?

> **Ответ**

Это функции которые возвращают данные в виде коллекции и к ним можно обратиться в предложении FROM.<br>
Применяются если нужно преобразовать данные и обратиться к ним в SQL-запросе.<br>
Табличные функции бывают<br>
* потоковые (поточные)<br>
* конвейерные <br>

Конвейерные появились позже, и несколько шустрее, из-за того, что не накапливаю результат, а выдают его сразу.



<br>

### Вопрос 7
```sql
LOOP
  FETCH c1 INTO my_ename, my_sal, my_hiredate;
  insert into A (Name,Salary) values (my_ename,my_sal);
END LOOP;   
``` 
Чего не хватает в данном цикле?

> **Ответ**

``` EXIT WHEN clients_cur%NOTFOUND; ```
правильно будет 
```sql
LOOP
  FETCH c1 INTO my_ename, my_sal, my_hiredate;
  EXIT WHEN clients_cur%NOTFOUND;_cur%notfound;
  insert into A (Name,Salary) values (my_ename,my_sal);
END LOOP;    
``` 



<br>

### Вопрос 8
```TYPE Staff IS TABLE of Material;``` 

Какого типа можеть быть  Material? (Перечислите)

1.	Varchar2
2.	Integer
3.	Long
4.	Record

> **Ответ** (все кроме Record)<br>
* Varchar2<br>
* Integer<br>
* Long


----

<br>

# Тест 2 (файл Задание.docx)

## SQL\plSQL - TEST

### Вопрос 1

Какие два утверждения справедливы относительно двух подзапросов, соединенных оператором ``` UNION ``` ?

  | L | Вариант |
  | --- | :--- |
  | A. | UNION всегда выводит все строки верхнего подзапроса, а затем все строки нижнего. |
  | B. | Количество столбцов в подзапросах, объединенных UNION, должно совпадать. |
  | C. | Имена столбцов в подзапросах, объединенных UNION, должны совпадать. |
  | D. | Именами столбцов при выводе результата станут имена столбцов первого(верхнего) подзапроса. |
  
> **Ответ:** B и D.



<br>

### Вопрос 2

Какие два утверждения справедливы для временной таблицы ``` (global temporary table) ``` ?

  | L | Вариант |
  | --- | :--- |
  | A. | Данные, записанные во временную таблицу, доступны только из той же сессии, в которой проводилась запись. |
  | B. | Для доступа другого пользователя к данным, записанным вами во временную таблицу, необходимо использовать выражение GRANT SELECT. |
  | C. | После аварийного сбоя и восстановления инстанса данные временных таблиц, существующие на момент сбоя, будут восстановлены. |
  | D. | Две сессии, подключенные под одним и тем же пользователем, будут работать с одной временной таблицей независимо друг от друга и видеть в таблице только собственные данные. |
  | E. | Две сессии, подключенные под одним и тем же пользователем, могут обмениваться данными через временную таблицу. |
  
> **Ответ:**  A и D.



<br>

### Вопрос 3 

Какое утверждение справедливо о выражении ``` ORDER BY ``` ?

  | L | Вариант |
  | --- | :--- |
  | A. | При сортировке символьных данных они являются регистрозависимыми. |
  | B. | Значения NULL вообще не рассматриваются в операции сортировки. |
  | C. | В выражении ORDER BY могут использоваться только те столбцы, которые указаны в списке вывода SELECT (SELECT столбец1, столбец2...) |
  | D. | Данные числовых типов выводятся от максимального к минимальному, только если они содержат десятичные разряды. |
  
> **Ответ:**  A.



<br>

### Вопрос 4

Какие привилегии необходимо и достаточно дать пользователю СУБД Oracle user_name для отладки процедуры или функции PL/SQL в схеме пользователя? 
Пользователь уже имеет привилегию CREATE SESSION, объект (процедура или функция) в схеме уже создан.

  | L | Вариант |
  | --- | :--- |
  | A. | ``` GRANT COMMENT ANY TABLE TO user_name ``` |
  | B. | ``` GRANT CONNECT SESSION TO user_name ``` |
  | C. | ``` GRANT DEBUG CONNECT SESSION TO user_name ``` |
  | D. | ``` GRANT DEBUG ANY FUNCTION TO user_name ``` |
  | E. | ``` GRANT DEBUG ANY PROCEDURE TO user_name ``` |
  | F. | ``` никаких привилегий давать не нужно, все и так будет работать ``` |
  | G. | ``` GRANT CREATE PROCEDURE TO user_name ``` |
  
> **Ответ:**  B и E. (я бы ещё G добавил)



<br>

### Вопрос 5 

Как будет производится разбор плана второго SQL-запроса в следующем примере:

```sql 
select t_dockind from dpmpaym_dbt where t_paymentid = :paymentid;
truncate table usr_pmdocs_dbt;
select t_dockind from dpmpaym_dbt where t_paymentid = :paymentid;
```

  | L | Вариант |
  | --- | :--- |
  | A. | Оптимизатор ORACLE заново произведет разбор запроса и построит план выполнения заново |
  | B. | Оптимизатор ORACLE возьмет план запроса из REDO |
  | C. | Оптимизатор ORACLE возьмет план выполнения из BUFFER CACHE |
  | D. | ORACLE создаст индекс по полю указанному в первом ``` SELECT ``` и встроит его в план запроса |
  
> **Ответ:**  A.


<br>

### Задание 

Составьте свое задание для проверки знаний по программированию на языке sql\plSQL

**Решение:** Вот одно из тестовых [заданий](https://github.com/kbarsu/ingos/blob/main/README.md) 



<br>

## RSL - TEST 

### Вопрос 1 

Есть три макроса:

```C
Макрос "111.mac"
   import "222.mac", "333.mac";
   print (abc);

Макрос "222.mac"
   private var abc;
   abc = "second";

Макрос "333.mac"
   private var abc;
   abc = "third";
```

Что будет в результате выполнения макроса "111.mac"?

  | L | Вариант |
  | --- | :--- |
  | A. | Ошибка: Переопределение идентификатора abc |
  | B. | Ошибка: Неопределенный идентификатор abc |
  | C. | Будет выведено: second |
  | D. | Будет пустой вывод  |
  
> **Ответ:**  B.



<br>

### Вопрос 2

Есть некая таблица под названием, например, dmytable_dbt. В ней есть два поля: recid - ID записи, myname - текстовое поле. Задача: для записи с recid = 15 обновить поле myname на "New Name".

Реализация: 

```C
var t = TRecHandler("mytable.dbt");
t.rec.recid = 15;
if (GetEQ(t))
   t.rec.name = "New Name";
end;
```

Верна ли конструкция, получим ли ожидаемый результат?

  | L | Вариант |
  | --- | :--- |
  | A. | Программа отработает без ошибок, ожидаемый результат получим. |
  | B. | Программа отработает без ошибок, при выходе из программы результат не сохранится в БД. |
  | C. | Программа отработает без ошибок, ожидаемый результат не получим. |
  | D. | Программа выдаст синтаксическую ошибку. |
  
> **Ответ:**  B.



<br>

### Вопрос 3

Что получим в результате выполнения кода:

```C
macro test(b:@Variant)
   b = TArray();
   b(b.Size) = 123;
end;

var a;
test(@a);
println(a(0));
```

  | L | Вариант |
  | --- | :--- |
  | A. | Вывод на экран: 123. |
  | B. | Код отработает без ошибок, вывод пустой. |
  | C. | Получим ошибку компилятора: "Нет свойств или методов у необъектной переменной А". |
  | D. | Получим сообщение "Ошибки при компиляции". |
  
> **Ответ:**  D.



<br>

### Вопрос 4

Разработчик в своем макросе определил диалоговую панель как: 

```C
VAR dlg = TRecHandler("TEST_PNL", null, true); 
```

Диалоговая панель имеет четыре текстовых поля: Field1; Field2; Field3; Field4. Индексы полей идут по порядку, начиная с 1.

Как правильно обратиться к полю Field3, чтобы узнать его значение?

  | L | Вариант |
  | --- | :--- |
  | A. | ``` dlg.rec[3].value; ``` |
  | B. | ``` dlg.item(3).value; ``` |
  | C. | ``` dlg.rec(3); ``` |
  | D. | ``` dlg.rec[3]; ``` |
  
> **Ответ:**  B.



<br>

### Вопрос 5

Чему будет равен результат выполнения следующего кода:

```C
Class Test
   Macro getText(): String
     return "Test!";
   End;
   
   Macro getText(FIO: String): String
     return "Hello, " + FIO + "!";
   End;
 End;

  Class (Test) MyTest
    Macro getText(FIO: String): String
      return "Здесь был ";
    End;

    Macro getMessage(): String
      return getText("Иванов Иван Иванович");
    End;
 End;

var obj: MyTest();
obj.getMessage();
```

  | L | Вариант |
  | --- | :--- |
  | A. | Здесь нет правильного ответа; |
  | B. | «Test!»; |
  | C. | Код не выполниться, так как возникнет ошибка компиляции; |
  | D. | «Здесь был Иванов Иван Иванович». |
  
> **Ответ:**  A.



<br>

### Задание 

Составьте свое задание для проверки знаний по программированию на языке RSL

> **Решение:** Мало практического опыта



