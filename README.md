## Проекты

### Список всех проектов с возможностью пагинации

**Без пагинации:**

`GET: api/projects`

**С пагинацией:**

`GET: api/projects?limit=10&offset=10`

### Список проектов для показа на главной

`GET: api/main/projects`

### Один проект

`GET: api/project/{id}`

`{id}` - id проекта

## Обработчик формы обратной связи

`POST: api/feedback`

**Принимает данные в теле запроса в формате JSON:**

```json
{
    "theme": "Let’s go to work!",
    "projects": ["Mobile App", "Website", "Landing Page"],
    "budget": "$3000-5000",
    "workingHours": "200 h",
    "name": "Test Name",
    "contact": "test@mail.com",
    "comment": "Some test comment"
}
```
