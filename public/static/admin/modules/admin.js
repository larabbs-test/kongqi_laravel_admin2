layui.define(['layer', 'element', 'verify', 'uform', 'tabPage', 'cacheNav', 'custormEvent', 'contextMenu'], function (exports) {
    var cacheNav = layui.cacheNav;
    var element = layui.element;
    var admin = {};
    var form = layui.uform;
    var verify = layui.verify;
    $('[data-tips="tooltip"]').tooltip();
    var contextMenu = layui.contextMenu;
    var tabPage=layui.tabPage;

    // 全局鼠标右键菜单
    contextMenu.bind($("#LAY_app_tabs"), [
        {
            icon: 'layui-icon layui-icon-refresh',
            name: '刷新主页面',
            click: function () {
                location.reload();
            }
        },
        {
            icon: 'layui-icon layui-icon-layouts',
            name: '刷新',
            click: function () {
                parent.location.reload();
            }
        },
        {
            icon: 'layui-icon layui-icon-close',
            name: '关闭其他',
            click: function () {
                tabPage.closeOtherTabs();
            }
        },
        {
            icon: 'layui-icon layui-icon-close',
            name: '关闭当前',
            click: function () {
                tabPage.closeThisTabs();
            }
        }

    ]);

    exports('admin', admin);
})