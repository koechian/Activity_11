<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | GUSHI</title>
    <link rel="stylesheet" href="/CSS/admin-nav.css">
    <link rel="stylesheet" href="/CSS/admin-products.css">
    <link rel="stylesheet" href="/CSS/admin.css">

</head>

<body>
    <div class="nav-left">
        <a href="<?= site_url('Pages') ?>">
            <svg class="logo" xmlns="http://www.w3.org/2000/svg" width="100" height="38" viewBox="0 0 100 38">
                <text id="GUSHI" transform="translate(0 31)" fill="#d4d0d0" font-size="34" font-family="Philosopher-Regular, Philosopher">
                    <tspan x="0" y="0">GUSHI</tspan>
                </text>
            </svg>
        </a>

        <div class="items">
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <path id="bx-user" d="M19,2a8.664,8.664,0,0,0-8.889,8.421A8.664,8.664,0,0,0,19,18.842a8.664,8.664,0,0,0,8.889-8.421A8.664,8.664,0,0,0,19,2Zm0,13.474a5.2,5.2,0,0,1-5.333-5.053A5.2,5.2,0,0,1,19,5.368a5.2,5.2,0,0,1,5.333,5.053A5.2,5.2,0,0,1,19,15.474ZM35,34V32.316c0-6.511-5.572-11.789-12.444-11.789H15.444C8.572,20.526,3,25.8,3,32.316V34H6.556V32.316a8.664,8.664,0,0,1,8.889-8.421h7.111a8.664,8.664,0,0,1,8.889,8.421V34Z" transform="translate(-3 -2)" fill="#fff" />
                </svg>
            </a>
            <a href="<?= site_url('Admin/Categories') ?>"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <path id="bx-store" d="M29.437,3.635A3.183,3.183,0,0,0,26.694,2H9.306A3.184,3.184,0,0,0,6.563,3.635l-4.334,7.6A1.743,1.743,0,0,0,2,12.105a6.891,6.891,0,0,0,1.6,4.409V30.632A3.291,3.291,0,0,0,6.8,34H29.2a3.291,3.291,0,0,0,3.2-3.368V16.515A6.891,6.891,0,0,0,34,12.105a1.743,1.743,0,0,0-.229-.867Zm1.338,8.893a3.194,3.194,0,0,1-6.374-.423,1.558,1.558,0,0,0-.062-.323l.032-.007L23.152,5.368h3.542l4.08,7.16ZM16.11,5.368h3.778l1.3,6.846A3.28,3.28,0,0,1,18,15.474a3.28,3.28,0,0,1-3.189-3.259Zm-6.8,0h3.542l-1.216,6.407.032.007a1.462,1.462,0,0,0-.064.323,3.291,3.291,0,0,1-3.2,3.368,3.266,3.266,0,0,1-3.174-2.946ZM14.8,30.632V25.579h6.4v5.053Zm9.6,0V25.579a3.291,3.291,0,0,0-3.2-3.368H14.8a3.291,3.291,0,0,0-3.2,3.368v5.053H6.8V18.6a6.058,6.058,0,0,0,1.6.239,6.251,6.251,0,0,0,4.8-2.285,6.183,6.183,0,0,0,9.6,0,6.251,6.251,0,0,0,4.8,2.285,6.058,6.058,0,0,0,1.6-.239V30.632Z" transform="translate(-2 -2)" fill="#fff" />
                </svg>
            </a>
            <a href="<?= site_url('Admin') ?>"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <path id="Path_1" data-name="Path 1" d="M18,2A16,16,0,1,0,34,18,16.018,16.018,0,0,0,18,2Zm0,28.8A12.8,12.8,0,1,1,30.8,18,12.815,12.815,0,0,1,18,30.8Z" transform="translate(-2 -2)" fill="#fff" />
                    <path id="Path_2" data-name="Path 2" d="M12,5.166v11.09H23.067A11.051,11.051,0,0,0,12,5.166Z" transform="translate(4 -0.256)" fill="#fff" />
                </svg>

            </a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="32.17" height="32" viewBox="0 0 32.17 32">
                    <path id="Path_3" data-name="Path 3" d="M28.444,0H3.556A3.559,3.559,0,0,0,0,3.556v7.111H3.556V3.556H28.444V28.444H3.556V21.333H0v7.111A3.559,3.559,0,0,0,3.556,32H28.444A3.559,3.559,0,0,0,32,28.444V3.556A3.56,3.56,0,0,0,28.444,0Z" transform="translate(32 32) rotate(180)" fill="#fff" />
                    <g id="bx-exit" transform="translate(49.17 142) rotate(180)">
                        <path id="Path_4" data-name="Path 4" d="M8,8l5-4L8,0V3H0V5H8Z" transform="translate(17 123)" fill="#fff" />
                    </g>
                </svg>
            </a>
        </div>
    </div>