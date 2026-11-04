# BusCheck — frontend (Marco 1)

HTML5 semântico + CSS3 responsivo (Mobile-First). Sem JavaScript, sem frameworks.

## Páginas
| Ficheiro | Papel |
|---|---|
| index.html | Início: destaques, linhas, posts recentes |
| posts.html | Listagem com pesquisa, comentários |
| perfil.html | Perfil de utilizador e os seus posts |
| formulario.html | Criar/editar post e editar perfil |
| login.html | Login e registo |

## Para quem fizer o backend (PHP + MySQL via PDO)
1. Procurar `BACKEND:` nos HTML — cada ponto de ligação está comentado.
2. Converter `.html` em `.php`; mover menu/topo/aside para `includes/` (são idênticos nas 5 páginas).
3. Os `name=` dos formulários já coincidem com as colunas sugeridas.
4. Ações previstas em `php/`: login, registo, guardar_post, eliminar_post, guardar_perfil, criar_comentario.
5. Segurança: prepared statements, `password_hash`/`password_verify`, `htmlspecialchars` ao imprimir, token CSRF, verificar no servidor que post/comentário pertencem a `$_SESSION['user_id']`.

## Tabelas sugeridas
- utilizadores(id, nome, email UNIQUE, password_hash, foto, data_registo)
- posts(id, user_id, titulo, linha, tipo, conteudo, data)
- comentarios(id, post_id, user_id, conteudo, data)
