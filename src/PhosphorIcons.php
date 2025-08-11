<?php

namespace Filafly\Icons\Phosphor;

use Filafly\Icons\IconSet;
use Filafly\Icons\Phosphor\Enums\Phosphor;
use Filafly\Icons\Phosphor\Enums\PhosphorStyle;
use Filament\Actions\View\ActionsIconAlias;
use Filament\Forms\View\FormsIconAlias;
use Filament\Infolists\View\InfolistsIconAlias;
use Filament\Notifications\View\NotificationsIconAlias;
use Filament\Schemas\View\SchemaIconAlias;
use Filament\Support\View\SupportIconAlias;
use Filament\Tables\View\TablesIconAlias;
use Filament\View\PanelsIconAlias;

class PhosphorIcons extends IconSet
{
    protected string $pluginId = 'filafly-filament-phosphor-icons';

    protected mixed $iconEnum = Phosphor::class;

    protected string $iconPrefix = 'phosphor';

    protected mixed $styleEnum = PhosphorStyle::class;

    protected array $iconMap = [
        PanelsIconAlias::GLOBAL_SEARCH_FIELD => Phosphor::MagnifyingGlass,
        PanelsIconAlias::PAGES_DASHBOARD_ACTIONS_FILTER => Phosphor::Funnel,
        PanelsIconAlias::PAGES_DASHBOARD_NAVIGATION_ITEM => Phosphor::House,
        PanelsIconAlias::PAGES_PASSWORD_RESET_REQUEST_PASSWORD_RESET_ACTIONS_LOGIN => Phosphor::ArrowRight,
        PanelsIconAlias::PAGES_PASSWORD_RESET_REQUEST_PASSWORD_RESET_ACTIONS_LOGIN_RTL => Phosphor::ArrowLeft,
        PanelsIconAlias::RESOURCES_PAGES_EDIT_RECORD_NAVIGATION_ITEM => Phosphor::NotePencil,
        PanelsIconAlias::RESOURCES_PAGES_MANAGE_RELATED_RECORDS_NAVIGATION_ITEM => Phosphor::CardsThree,
        PanelsIconAlias::RESOURCES_PAGES_VIEW_RECORD_NAVIGATION_ITEM => Phosphor::Eye,
        PanelsIconAlias::SIDEBAR_COLLAPSE_BUTTON => Phosphor::CaretLeft,
        PanelsIconAlias::SIDEBAR_COLLAPSE_BUTTON_RTL => Phosphor::CaretRight,
        PanelsIconAlias::SIDEBAR_EXPAND_BUTTON => Phosphor::CaretRight,
        PanelsIconAlias::SIDEBAR_EXPAND_BUTTON_RTL => Phosphor::CaretLeft,
        PanelsIconAlias::SIDEBAR_GROUP_COLLAPSE_BUTTON => Phosphor::CaretUp,
        PanelsIconAlias::TENANT_MENU_BILLING_BUTTON => Phosphor::CreditCard,
        PanelsIconAlias::TENANT_MENU_PROFILE_BUTTON => Phosphor::GearSix,
        PanelsIconAlias::TENANT_MENU_REGISTRATION_BUTTON => Phosphor::Plus,
        PanelsIconAlias::TENANT_MENU_TOGGLE_BUTTON => Phosphor::CaretDown,
        PanelsIconAlias::THEME_SWITCHER_LIGHT_BUTTON => Phosphor::Sun,
        PanelsIconAlias::THEME_SWITCHER_DARK_BUTTON => Phosphor::Moon,
        PanelsIconAlias::THEME_SWITCHER_SYSTEM_BUTTON => Phosphor::Monitor,
        PanelsIconAlias::TOPBAR_CLOSE_SIDEBAR_BUTTON => Phosphor::X,
        PanelsIconAlias::TOPBAR_OPEN_SIDEBAR_BUTTON => Phosphor::List,
        PanelsIconAlias::TOPBAR_GROUP_TOGGLE_BUTTON => Phosphor::CaretDown,
        PanelsIconAlias::TOPBAR_OPEN_DATABASE_NOTIFICATIONS_BUTTON => Phosphor::Bell,
        PanelsIconAlias::USER_MENU_PROFILE_ITEM => Phosphor::UserCircle,
        PanelsIconAlias::USER_MENU_LOGOUT_BUTTON => Phosphor::SignOut,
        PanelsIconAlias::WIDGETS_ACCOUNT_LOGOUT_BUTTON => Phosphor::SignOut,
        PanelsIconAlias::WIDGETS_FILAMENT_INFO_OPEN_DOCUMENTATION_BUTTON => Phosphor::BookOpen,
        PanelsIconAlias::WIDGETS_FILAMENT_INFO_OPEN_GITHUB_BUTTON => Phosphor::GithubLogo,

        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_CLONE => Phosphor::Copy,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_COLLAPSE => Phosphor::CaretUp,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_DELETE => Phosphor::Trash,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_EXPAND => Phosphor::CaretDown,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_MOVE_DOWN => Phosphor::ArrowDown,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_MOVE_UP => Phosphor::ArrowUp,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_REORDER => Phosphor::ArrowsDownUp,
        FormsIconAlias::COMPONENTS_CHECKBOX_LIST_SEARCH_FIELD => Phosphor::MagnifyingGlass,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_DRAG_CROP => Phosphor::Crop,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_DRAG_MOVE => Phosphor::ArrowsOutCardinal,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_FLIP_HORIZONTAL => Phosphor::ArrowsInLineHorizontal,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_FLIP_VERTICAL => Phosphor::ArrowsInLineVertical,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_DOWN => Phosphor::ArrowCircleDown,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_LEFT => Phosphor::ArrowCircleLeft,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_RIGHT => Phosphor::ArrowCircleRight,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_UP => Phosphor::ArrowCircleUp,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ROTATE_LEFT => Phosphor::ArrowUDownLeft,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ROTATE_RIGHT => Phosphor::ArrowUUpRight,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_100 => Phosphor::ArrowsOut,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_IN => Phosphor::MagnifyingGlassPlus,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_OUT => Phosphor::MagnifyingGlassMinus,
        FormsIconAlias::COMPONENTS_KEY_VALUE_ACTIONS_DELETE => Phosphor::Trash,
        FormsIconAlias::COMPONENTS_KEY_VALUE_ACTIONS_REORDER => Phosphor::ArrowsDownUp,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_CLONE => Phosphor::Copy,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_COLLAPSE => Phosphor::CaretUp,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_DELETE => Phosphor::Trash,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_EXPAND => Phosphor::CaretDown,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_MOVE_DOWN => Phosphor::ArrowDown,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_MOVE_UP => Phosphor::ArrowUp,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_REORDER => Phosphor::ArrowsDownUp,
        FormsIconAlias::COMPONENTS_SELECT_ACTIONS_CREATE_OPTION => Phosphor::Plus,
        FormsIconAlias::COMPONENTS_SELECT_ACTIONS_EDIT_OPTION => Phosphor::NotePencil,
        FormsIconAlias::COMPONENTS_TEXT_INPUT_ACTIONS_HIDE_PASSWORD => Phosphor::EyeSlash,
        FormsIconAlias::COMPONENTS_TEXT_INPUT_ACTIONS_SHOW_PASSWORD => Phosphor::Eye,
        FormsIconAlias::COMPONENTS_TOGGLE_BUTTONS_BOOLEAN_FALSE => Phosphor::X,
        FormsIconAlias::COMPONENTS_TOGGLE_BUTTONS_BOOLEAN_TRUE => Phosphor::Check,

        TablesIconAlias::ACTIONS_DISABLE_REORDERING => Phosphor::Check,
        TablesIconAlias::ACTIONS_ENABLE_REORDERING => Phosphor::ArrowsDownUp,
        TablesIconAlias::ACTIONS_FILTER => Phosphor::Funnel,
        TablesIconAlias::ACTIONS_GROUP => Phosphor::CardsThree,
        TablesIconAlias::ACTIONS_OPEN_BULK_ACTIONS => Phosphor::DotsThreeVertical,
        TablesIconAlias::COLUMNS_COLLAPSE_BUTTON => Phosphor::CaretDown,
        TablesIconAlias::COLUMNS_ICON_COLUMN_FALSE => Phosphor::XCircle,
        TablesIconAlias::COLUMNS_ICON_COLUMN_TRUE => Phosphor::CheckCircle,
        TablesIconAlias::EMPTY_STATE => Phosphor::X,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_BOOLEAN => Phosphor::CheckCircle,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_DATE => Phosphor::Calendar,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_NUMBER => Phosphor::Sigma,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_RELATIONSHIP => Phosphor::ArrowsOut,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_SELECT => Phosphor::CaretUpDown,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_TEXT => Phosphor::Translate,
        TablesIconAlias::FILTERS_REMOVE_ALL_BUTTON => Phosphor::X,
        TablesIconAlias::GROUPING_COLLAPSE_BUTTON => Phosphor::CaretUp,
        TablesIconAlias::HEADER_CELL_SORT_ASC_BUTTON => Phosphor::CaretUp,
        TablesIconAlias::HEADER_CELL_SORT_BUTTON => Phosphor::CaretDown,
        TablesIconAlias::HEADER_CELL_SORT_DESC_BUTTON => Phosphor::CaretDown,
        TablesIconAlias::REORDER_HANDLE => Phosphor::DotsSix,
        TablesIconAlias::SEARCH_FIELD => Phosphor::MagnifyingGlass,

        NotificationsIconAlias::DATABASE_MODAL_EMPTY_STATE => Phosphor::X,
        NotificationsIconAlias::NOTIFICATION_CLOSE_BUTTON => Phosphor::X,
        NotificationsIconAlias::NOTIFICATION_DANGER => Phosphor::XCircle,
        NotificationsIconAlias::NOTIFICATION_INFO => Phosphor::Info,
        NotificationsIconAlias::NOTIFICATION_SUCCESS => Phosphor::CheckCircle,
        NotificationsIconAlias::NOTIFICATION_WARNING => Phosphor::WarningCircle,

        ActionsIconAlias::ACTION_GROUP => Phosphor::DotsThreeVertical,
        ActionsIconAlias::CREATE_ACTION_GROUPED => Phosphor::Plus,
        ActionsIconAlias::DELETE_ACTION => Phosphor::Trash,
        ActionsIconAlias::DELETE_ACTION_GROUPED => Phosphor::Trash,
        ActionsIconAlias::DELETE_ACTION_MODAL => Phosphor::Trash,
        ActionsIconAlias::DETACH_ACTION => Phosphor::LinkBreak,
        ActionsIconAlias::DETACH_ACTION_MODAL => Phosphor::LinkBreak,
        ActionsIconAlias::DISSOCIATE_ACTION => Phosphor::LinkBreak,
        ActionsIconAlias::DISSOCIATE_ACTION_MODAL => Phosphor::LinkBreak,
        ActionsIconAlias::EDIT_ACTION => Phosphor::NotePencil,
        ActionsIconAlias::EDIT_ACTION_GROUPED => Phosphor::NotePencil,
        ActionsIconAlias::EXPORT_ACTION_GROUPED => Phosphor::TrayArrowDown,
        ActionsIconAlias::FORCE_DELETE_ACTION => Phosphor::Trash,
        ActionsIconAlias::FORCE_DELETE_ACTION_GROUPED => Phosphor::Trash,
        ActionsIconAlias::FORCE_DELETE_ACTION_MODAL => Phosphor::Trash,
        ActionsIconAlias::IMPORT_ACTION_GROUPED => Phosphor::TrayArrowUp,
        ActionsIconAlias::MODAL_CONFIRMATION => Phosphor::Warning,
        ActionsIconAlias::REPLICATE_ACTION => Phosphor::Copy,
        ActionsIconAlias::REPLICATE_ACTION_GROUPED => Phosphor::Copy,
        ActionsIconAlias::RESTORE_ACTION => Phosphor::ArrowUUpLeft,
        ActionsIconAlias::RESTORE_ACTION_GROUPED => Phosphor::ArrowUUpLeft,
        ActionsIconAlias::RESTORE_ACTION_MODAL => Phosphor::ArrowUUpLeft,
        ActionsIconAlias::VIEW_ACTION => Phosphor::Eye,
        ActionsIconAlias::VIEW_ACTION_GROUPED => Phosphor::Eye,

        InfolistsIconAlias::COMPONENTS_ICON_ENTRY_FALSE => Phosphor::XCircle,
        InfolistsIconAlias::COMPONENTS_ICON_ENTRY_TRUE => Phosphor::CheckCircle,

        SchemaIconAlias::COMPONENTS_WIZARD_COMPLETED_STEP => Phosphor::Check,

        SupportIconAlias::BADGE_DELETE_BUTTON => Phosphor::X,
        SupportIconAlias::BREADCRUMBS_SEPARATOR => Phosphor::CaretRight,
        SupportIconAlias::BREADCRUMBS_SEPARATOR_RTL => Phosphor::CaretLeft,
        SupportIconAlias::MODAL_CLOSE_BUTTON => Phosphor::X,
        SupportIconAlias::PAGINATION_FIRST_BUTTON => Phosphor::CaretDoubleLeft,
        SupportIconAlias::PAGINATION_FIRST_BUTTON_RTL => Phosphor::CaretDoubleRight,
        SupportIconAlias::PAGINATION_LAST_BUTTON => Phosphor::CaretDoubleRight,
        SupportIconAlias::PAGINATION_LAST_BUTTON_RTL => Phosphor::CaretDoubleLeft,
        SupportIconAlias::PAGINATION_NEXT_BUTTON => Phosphor::CaretRight,
        SupportIconAlias::PAGINATION_NEXT_BUTTON_RTL => Phosphor::CaretLeft,
        SupportIconAlias::PAGINATION_PREVIOUS_BUTTON => Phosphor::CaretLeft,
        SupportIconAlias::PAGINATION_PREVIOUS_BUTTON_RTL => Phosphor::CaretRight,
        SupportIconAlias::SECTION_COLLAPSE_BUTTON => Phosphor::CaretDown,
    ];
}
