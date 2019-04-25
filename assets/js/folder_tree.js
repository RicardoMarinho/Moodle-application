window.onload = function () {

    //Initializing Tree

    //Tree Context Menu Structure
    var contex_menu = {
        'context1': {
            elements: [
                {
                    text: 'Pasta',
                    icon: 'images/folder.png',
                    action: function (node) {

                    },
                    submenu: {
                        elements: [
                            {
                                text: 'Abrir / Fechar',
                                icon: 'images/leaf.png',
                                action: function (node) {
                                    node.toggleNode();
                                }
                            },
                            {
                                text: 'Expandir pasta',
                                icon: 'images/leaf.png',
                                action: function (node) {
                                    node.expandNode();
                                }
                            },
                            {
                                text: 'Fechar pasta',
                                icon: 'images/leaf.png',
                                action: function (node) {
                                    node.collapseNode();
                                }
                            },
                            {
                                text: 'Expandir tudo',
                                icon: 'images/tree.png',
                                action: function (node) {
                                    node.expandSubtree();
                                }
                            },
                            {
                                text: 'Fechar tudo',
                                icon: 'images/tree.png',
                                action: function (node) {
                                    node.collapseSubtree();
                                }
                            },
                            {
                                text: 'Eliminar Pasta',
                                icon: 'images/delete.png',
                                action: function (node) {
                                    node.removeNode();
                                }
                            },
                        ]
                    }
                },
                {
                    text: 'Ficheiro',
                    icon: 'images/file.png',
                    action: function (node) {

                    },
                    submenu: {
                        elements: [
                            {
                                text: 'Adicionar Ficheiro',
                                icon: 'images/add1.png',
                                action: function (node) {
                                    node.createChildNode('Created', false, 'images/folder.png', null, 'context1');
                                }
                            },
                            {
                                text: 'Eliminar Ficheiro',
                                icon: 'images/delete.png',
                                action: function (node) {
                                    node.removeChildNodes();
                                }
                            }
                        ]
                    }
                }
            ]
        }
    };

    //Creating the tree
    tree = createTree('div_tree', 'white', contex_menu);

    

    //Loop to create test nodes
    for (var i = 1; i < 10; i++) {
        node1 = tree.createNode('Pasta ' + i, false, 'images/folder.png', null, null, 'context1');
        for (var j = 1; j < 5; j++) {
            node2 = node1.createChildNode('Sub-pasta ' + j, false, 'images/folder.png', null, 'context1');
            for (var k = 1; k < 5; k++) {
                node3 = node2.createChildNode('Ficheiro ' + k, false, 'images/file.png', null, 'context1');
                /*for (var l=1; l<5; l++) {
                    node4 = node3.createChildNode('Level 3 - Node ' + l, false, 'images/key_green.png',null,'context1');
                    for (var m=1; m<5; m++) {
                        node4.createChildNode('Level 4 - Node ' + m, false, 'images/file.png',null,'context1');
                    }
                }*/
            }
        }
    }

    //Rendering the tree
    tree.drawTree();


};
