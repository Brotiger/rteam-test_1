![Code size](https://img.shields.io/github/languages/code-size/brotiger/rteam_test_1)
![Files](https://img.shields.io/github/directory-file-count/brotiger/rteam_test_1)
![Top Language](https://img.shields.io/github/languages/top/brotiger/rteam_test_1)
![Last commit](https://img.shields.io/github/last-commit/brotiger/rteam_test_1)

# RTeam
## Тестовое задание №1
Задание - [https://drive.google.com/file/d/16Z0k5CoZqq4ufChQIVMBnx2Fgd8zeHHg/view?usp=sharing](https://drive.google.com/file/d/16Z0k5CoZqq4ufChQIVMBnx2Fgd8zeHHg/view?usp=sharing) 

В ходе выполнения тестового задания я использовал следующие паттерны:
1. Компоновщик
2. Фабричный метод

А так же следующие подходы:
1. Модульный подход
2. DDD

Мною были написаны автотесты для автоматизации процесса проверки задания. Тесты расположены по следующему пути - [./Tests/Unit/...](https://github.com/Brotiger/rteam_test_1/tree/master/Tests/Unit "Директория с тестами") 

### Запуск приложения
#### Запуск c помощью Docker

1. docker-compose build
2. docker-compose up

Результат:

![Пример результата](https://raw.githubusercontent.com/Brotiger/rteam_test_1/master/img/Screenshot%20from%202022-11-05%2022-17-17.png)

#### Нативный запуск

1. composer install
2. composer run-script test

Результат:

![Пример результата](https://raw.githubusercontent.com/Brotiger/rteam_test_1/master/img/Screenshot%20from%202022-11-05%2022-02-52.png)