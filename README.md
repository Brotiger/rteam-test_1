# RTeam
## Тестовое задание №1
Задание - [https://drive.google.com/file/d/16Z0k5CoZqq4ufChQIVMBnx2Fgd8zeHHg/view?usp=sharing](https://drive.google.com/file/d/16Z0k5CoZqq4ufChQIVMBnx2Fgd8zeHHg/view?usp=sharing) 

В ходе выполнения тестового задания я использовал следующие паттерны:
1. Компоновщик
2. Фабричный метод

А так же следующие подходы:
1. Модульный подход
2. DDD

Мною были написаны автотесты для автоматизации процесса проверки задания. Тесты расположены по следующему пути - [./Tests/Unit/...](https://github.com/Brotiger/rtim_test_1/tree/master/Tests/Unit "Директория с тестами") 

### Запуск приложения
#### Запуск c помощью Docker

1. docker-compose build
2. docker-compose up

#### Нативный запуск

1. composer install
2. composer run-script test