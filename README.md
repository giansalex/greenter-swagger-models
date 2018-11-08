# Greenter Swagger Models

Require `PHP >7.1`

```
php index.php
```

This generate `swagger.yaml` in current directory.


```yaml
definitions:
    Invoice:
        type: object
        properties:
            tipoDoc:
                type: string
```

> You need set `cdrZip` format to `byte`